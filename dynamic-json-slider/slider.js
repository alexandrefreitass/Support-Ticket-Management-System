const remoteJson = {
  url: "http://localhost:5000/images",
  method: "post",
  headers: { "Content-Type": "application/json" },
  dataType: "json",
};

const localJson = "images.json";
const gallerySource = localJson;
let galleries = [];

const settings = {
  galleryContainerClass: "imageSlider",
  default: {
    displayAltText: true,
    navigation: {
      enabled: true,
      arrows: true,
      dots: true,
    },
  },
  galleryDataId: {
    0: {
      displayAltText: true,
      navigation: {
        enabled: true,
        arrows: true,
        dots: true,
      },
    },
    1: {
      displayAltText: false,
      navigation: {
        enabled: false,
        arrows: true,
        dots: false,
      },
    },
  },
};

function getGalleryTemplate(gallery, id) {
  return `<div class="slider slideShow" data-id="${id}">
              <div class="images" data-count=${gallery.length}></div>
          </div>`;
}

function getImageTemplate(id, image, gallerySettings) {
  let altTextTemplate = "";

  if (gallerySettings.displayAltText) {
    altTextTemplate = `<div class="image__caption ${id === 0 ? "active" : ""}">
                        <h3>${image.alt}</h3>
                      </div>`;
  }

  return `<div class="image ${id === 0 ? "active" : ""}" data-id="${id}">
            <img src="${image.url}" alt="${image.alt}" />
            ${altTextTemplate}
         </div>`;
}

function getArrowsTemplate(id) {
  return `<button class="prev prevButton" disabled />
          <button class="next nextButton"></button>`;
}

function getDotsTemplate(gallery) {
  const dots = [];

  dots.push('<div class="dots">');

  $.each(gallery, function (i) {
    dots.push(
      `<div class="dot ${i === 0 ? "active" : ""}" 
        data-id="${i}">
       </div>`
    );
  });

  dots.push("</div");
  return dots.join("");
}

function Gallery(gallery, id) {
  this.id = id;
  this.settings = getGallerySettings(id);
  this.template = getGalleryTemplate(gallery, id);
  this.arrows = getArrowsTemplate();
  this.dots = getDotsTemplate(gallery);
}

function Image(id, image, gallerySettings) {
  this.id = id;
  this.template = getImageTemplate(this.id, image, gallerySettings);
}

const getData = async function () {
  try {
    const result = await $.ajax(gallerySource);
    return await result.data;
  } catch (e) {
    console.log(e);
  }
};

function getGallerySettings(id) {
  if (!settings.galleryDataId.hasOwnProperty(`${id}`)) {
    return settings.default;
  }

  return settings.galleryDataId[id];
}

const renderGalleries = async function (galleries) {
  $.each(galleries, function (i, gallery) {
    if (
      !gallery.length ||
      !`.${settings.galleryContainerClass}[data-gallery-id='${i}']`
    ) {
      return;
    }
    const galleryItem = new Gallery(gallery, i);

    $(`.${settings.galleryContainerClass}[data-gallery-id='${i}']`).append(
      galleryItem.template
    );

    $thisImages = $(`[data-id=${i}] .images`);

    $.each(gallery, function (j, image) {
      const imageItem = new Image(j, image, galleryItem.settings);
      $thisImages.append(imageItem.template);
    });
    if (gallery.length > 1) {
      if (galleryItem.settings.navigation.arrows) {
        $(`.slider[data-id=${i}]`).append(galleryItem.arrows);
      }
      if (galleryItem.settings.navigation.dots) {
        $(`.slider[data-id=${i}]`).append(galleryItem.dots);
      }
    }
  });
};

function setActiveImageClass($active, $toBeActive) {
  $active.removeClass("active");
  $toBeActive.addClass("active");
}

function disableButton($this, direction, value) {
  $this.parent().find(`.${direction}Button`).attr("disabled", value);
}

function stepPrev($this) {
  const $active = $this.parent().find(".active");

  setActiveImageClass($active, $active.prev());

  if (!$active.prev().prev().length) {
    disableButton($this, "prev", true);
  }

  if (!$active.next().length) {
    disableButton($this, "next", false);
  }
}

function stepNext($this) {
  const imagesTotal = parseInt(
    $this.parent().parent().find($(".images")).attr("data-count")
  );
  const $active = $this.parent().find(".active");
  const nextId = parseInt($active.next().attr("data-id"));

  setActiveImageClass($active, $active.next());

  if ($active.next().length) {
    disableButton($this, "prev", false);
  }

  if (nextId === imagesTotal - 1) {
    disableButton($this, "next", true);
  }
}

function setActiveImage($this) {
  const id = parseInt($this.attr("data-id"));

  setActiveImageClass(
    $this.parent().parent().find($(".image.active")),
    $this.parent().parent().find(`.image[data-id='${id}']`)
  );

  $this.parent().find($(".dot.active")).removeClass("active");
  $this.addClass("active");

  const imagesTotal = parseInt(
    $this.parent().parent().find($(".images")).attr("data-count")
  );

  if (id !== 0 && imagesTotal - 1 === id) {
    disableButton($this.parent(), "prev", false);
    disableButton($this.parent(), "next", true);
    console.log("2");
  } else if (id === 0) {
    disableButton($this.parent(), "prev", true);
    disableButton($this.parent(), "next", false);
    console.log("3");
  } else if (id !== 0) {
    disableButton($this.parent(), "prev", false);
    disableButton($this.parent(), "next", false);
  }
}

const setNavHandlers = async function () {
  $(".dot").on("click", function (e) {
    e.preventDefault;
    setActiveImage($(this));
  });

  $(".prevButton").on("click", function (e) {
    e.preventDefault;
    stepPrev($(this));
  });

  $(".nextButton").on("click", function (e) {
    e.preventDefault;
    stepNext($(this));
  });
};

$(document).ready(async function () {
  const init = async function init() {
    const data = await getData();
    galleries = data;
  };

  await init();
  await renderGalleries(galleries);
  await setNavHandlers();
});
