//SCROLL FIX

addEventListener("resize", () => {
    scrollTo(0, scrollY)
})


//MENU ACTION

let menu_is_opened = false

let mobile_menu = document.querySelector(".mobile-menu")
let mobile_menu_body = document.querySelector(".mobile-menu .mobile-menu__body")

mobile_menu.style.display = "none"

function mobileMenuAction() {
    if (!menu_is_opened) {
        mobile_menu.style.pointerEvents = "fill"
        mobile_menu.style.display = "block"
        anime({
            targets: [mobile_menu],
            backgroundColor: ["rgba(0,0,0,0)", "rgba(0,0,0,0.3)"],
            easing: "cubicBezier(.48,.14,.45,.97)",
            duration: 200,
        })
        anime({
            targets: [mobile_menu_body],
            translateX: ["100%", "0%"],
            easing: "cubicBezier(.48,.14,.45,.97)",
            duration: 200
        })

        menu_is_opened = true
    } else {
        mobile_menu.style.pointerEvents = "none"
        anime({
            targets: [mobile_menu],
            backgroundColor: ["rgba(0,0,0,0)", "rgba(0,0,0,0.3)"],
            easing: "cubicBezier(.48,.14,.45,.97)"
        })
        anime({
            targets: [mobile_menu_body],
            translateX: ["0%", "100%"],
            easing: "cubicBezier(.48,.14,.45,.97)",
            duration: 200,
            complete: () => mobile_menu.style.display = "none"
        })
        menu_is_opened = false
    }
}


//pop up

let pupUp_is_open = false;
let pupUpElem = document.getElementsByClassName("pop-up")[0];
let pupUpElem2 = document.getElementsByClassName("pop-up__body")[0];
let html = document.getElementsByTagName("html")[0];

let curs = false;

pupUpElem2.addEventListener("mouseover", () => {
    curs = true;
});
pupUpElem2.addEventListener("mouseout", () => {
    curs = false;
});

function pupUp() {
    if (pupUp_is_open) {
        pupUpElem.style.display = "none";
        html.style.overflowY = "scroll";
        pupUp_is_open = false;
    } else {
        pupUpElem.style.display = "flex";
        html.style.overflowY = "hidden";
        pupUp_is_open = true;
    }
}

pupUpElem.addEventListener("click", function () {
    if (!curs) {
        pupUp();
    }
});

new Swiper(".gallery__images")


let d_slider = new Swiper(".doing__images", {
    slidesPerView: 3,
    spaceBetween: 18,
    on: {
        slideChange: event => {
            let index = event.activeIndex;
            let count = Math.floor(event.slides.length / 3) + 2;

            let points_dom = document.querySelector(".doing__points")

            points_dom.innerHTML = ""

            for (let i = 0; i < count; i++) {
                if (i === index) {
                    points_dom.innerHTML += `<div style="background: #C6C6C6;" class="doing__point gallery__point"></div>`
                } else {
                    points_dom.innerHTML += `<div style="background: #E8E8E8;" class="doing__point gallery__point"></div>`
                }
            }
        },
        afterInit: event => {
            let index = event.activeIndex;
            let count = Math.floor(event.slides.length / 3) + 2;

            let points_dom = document.querySelector(".doing__points")

            points_dom.innerHTML = ""

            for (let i = 0; i < count; i++) {
                if (i === index) {
                    points_dom.innerHTML += `<div style="background: #C6C6C6;" class="doing__point gallery__point"></div>`
                } else {
                    points_dom.innerHTML += `<div style="background: #E8E8E8;" class="doing__point gallery__point"></div>`
                }
            }
        }
    }
})
try {
    document.querySelector(".doing__left-button").addEventListener("click", () => {
        d_slider.slidePrev()
    })

    document.querySelector(".doing__right-button").addEventListener("click", () => {
        d_slider.slideNext()
    })
} catch {

}

class Gallery {
    static delegate() {
        let gallery_list = document.querySelectorAll(".gallery")
        gallery_list.forEach(element => {
            new this(element)
        })
    }

    constructor(element) {
        this.images = element.querySelector(".gallery__images")
        this.points = element.querySelector(".gallery__points")
        this.left = element.querySelector(".gallery__left-button")
        this.right = element.querySelector(".gallery__right-button")

        try {
            this.mobile_left = element.querySelector(".gallery__mobile-left-button")
            this.mobile_right = element.querySelector(".gallery__mobile-right-button")
        } catch {

        }

        try {
            this.swiper = this.images.swiper
        } catch {
            return
        }
        this.pointsUpdate()

        this.left.addEventListener("click", () => {
            this.swiper.slidePrev()
        })
        this.right.addEventListener("click", () => {
            this.swiper.slideNext()
        })

        try {
            this.mobile_left.addEventListener("click", () => {
                this.swiper.slidePrev()
            })
            this.mobile_right.addEventListener("click", () => {
                this.swiper.slideNext()
            })
        } catch {

        }

        this.swiper.on("slideChange", () => {
            this.pointsUpdate()
        })
    }

    pointsUpdate() {
        let index = this.swiper.activeIndex;
        let count = this.swiper.slides.length;

        this.points.innerHTML = ""

        for (let i = 0; i < count; i++) {
            if (i === index) {
                this.points.innerHTML += `<div class="gallery__point"></div>`
            } else {
                this.points.innerHTML += `<div style="opacity: 0.5" class="gallery__point"></div>`
            }
        }
    }

}

Gallery.delegate()
//gallery
//
// class Gallery {
//
//     pos = 0
//     max_pos = 0
//
//     gallery
//     items
//     first_item
//
//     points
//     point_container
//
//     constructor(elem, points) {
//         this.gallery = elem
//         this.items = elem.children
//         this.max_pos = this.items.length - 1
//         this.first_item = this.items[0]
//         this.points = points
//         this.point_container = this.points[0].parentElement
//
//         this.point_container.innerHTML = ""
//
//         for (let i = 0; i < this.max_pos + 1; i++) {
//             let point = document.createElement("div")
//             point.setAttribute("class", "gallery__point")
//             this.point_container.append(point)
//             point.style.opacity = "0.5"
//             if (i === 0) {
//                 point.style.opacity = "1"
//             }
//         }
//
//         this.points = this.point_container.children
//     }
//
//     moveTo(move) {
//         this.pos += move
//         if (this.pos > this.max_pos) {
//             this.pos = this.max_pos
//         } else if (this.pos < 0) {
//             this.pos = 0
//         }
//
//         this.first_item.style.marginLeft = -(100 * this.pos) + "%"
//
//         for (let i = 0; i < this.points.length; i++) {
//             const point = this.points[i]
//
//             if (this.pos === i) {
//                 point.style.opacity = "1"
//             } else {
//                 point.style.opacity = "0.5"
//             }
//         }
//     }
// }
//
// let gallery = document.querySelectorAll(".gallery")
//
// for (let i = 0; i < gallery.length; i++) {
//     const elem = gallery[i]
//
//     if (elem.getAttribute("id") === "doing") {
//         continue
//     }
//
//     let left = elem.querySelector(".gallery__left-button")
//     let right = elem.querySelector(".gallery__right-button")
//
//     let M_left = elem.querySelector(".gallery__mobile-left-button")
//     let M_right = elem.querySelector(".gallery__mobile-right-button")
//
//     let gallery_images = elem.querySelector(".gallery__images")
//     let gallery_points = elem.querySelector(".gallery__points").children
//
//     let g = new Gallery(gallery_images, gallery_points)
//
//     left.addEventListener("click", () => {
//         g.moveTo(-1)
//     })
//
//
//     right.addEventListener("click", () => {
//         g.moveTo(1)
//     })
//
//     g.start_cursor_position = 0
//     g.state = 0
//     g.dist = 0
//
//     elem.addEventListener("mousedown", event => {
//         g.state = 1
//         g.start_cursor_position = event.offsetX
//     })
//     elem.addEventListener("mouseup", () => {
//         g.state = 0
//         g.first_item.style.transition = ""
//         g.start_cursor_position = 0
//
//         if (g.dist > 20) {
//             g.moveTo(1)
//         }
//         if (g.dist < -20) {
//             g.moveTo(-1)
//         }
//         g.moveTo(0)
//         console.log("UP")
//     })
//     elem.addEventListener("mousemove", event => {
//         if (g.state === 1) {
//             g.dist = ((g.start_cursor_position - event.offsetX) / elem.clientWidth) * 100
//             g.dist = Math.floor(g.dist)
//
//             if (g.dist > 20) {
//                 g.first_item.style.marginLeft = (-(100 * g.pos) - 20) + "%"
//             }
//             if (g.dist < -20) {
//                 g.first_item.style.marginLeft = (-(100 * g.pos) + 20) + "%"
//             }
//         }
//     })
//
//
//     if (M_left !== null && M_right !== null) {
//
//         M_left.addEventListener("click", () => {
//             g.moveTo(-1)
//         })
//
//
//         M_right.addEventListener("click", () => {
//             g.moveTo(1)
//         })
//     }
// }
//


let more_menu_is_opened = false

function moreOpen(elem) {
    let body = elem.querySelector(".programs-block__more-body")

    if (more_menu_is_opened) {
        body.style.display = "none"
        more_menu_is_opened = false
    } else {
        more_menu_is_opened = true
        body.style.display = ""
    }
}