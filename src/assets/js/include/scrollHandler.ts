let scrollPos = 0
const mainNav = document.getElementById('mainNav')
const headerHeight = mainNav?.clientHeight || 0

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

function handleMediaQueryChange(e: MediaQueryList | MediaQueryListEvent) {
  if (e.matches) {
    window.addEventListener('scroll', handleScroll)
  } else {
    window.removeEventListener('scroll', handleScroll)
  }
}

export function initScrollHandler() {
  const mediaQuery = window.matchMedia('(min-width: 992px)')
  mediaQuery.addEventListener('change', handleMediaQueryChange)
  handleMediaQueryChange(mediaQuery)
}
