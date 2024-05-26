import { handleFormFocus, redirectOnSubmit } from './include/formHandler'
import { initScrollHandler } from './include/scrollHandler'

window.addEventListener('DOMContentLoaded', () => {
  initScrollHandler()
  handleFormFocus()
  redirectOnSubmit()
})
