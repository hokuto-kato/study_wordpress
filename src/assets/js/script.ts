import { handleFormFocus } from './include/formFocusHandler'
import { initScrollHandler } from './include/scrollHandler'

window.addEventListener('DOMContentLoaded', () => {
  initScrollHandler()
  handleFormFocus()
})
