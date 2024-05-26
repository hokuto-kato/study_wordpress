import throttle from './throttle'

let scrollPos = 0
const mainNav = document.getElementById('mainNav')
const headerHeight = mainNav?.clientHeight || 0 // Set default values

const isFixed = () => mainNav?.classList.contains('is-fixed')

const handleScroll = () => {
  const currentTop = document.body.getBoundingClientRect().top * -1

  if (currentTop < scrollPos) {
    // Scrolling Up
    if (currentTop > 0 && isFixed()) {
      mainNav?.classList.add('is-visible')
    } else {
      mainNav?.classList.remove('is-visible', 'is-fixed')
    }
  } else {
    // Scrolling Down
    mainNav?.classList.remove('is-visible')
    if (currentTop > headerHeight && !isFixed()) {
      mainNav?.classList.add('is-fixed')
    }
  }
  scrollPos = currentTop
}

const throttleHandleScroll = throttle(handleScroll, 100)

export function initScrollHandler() {
  window.addEventListener('scroll', throttleHandleScroll)
}
