import { handleFormFocus, redirectOnSubmit } from './include/formHandler'
import { initScrollHandler } from './include/scrollHandler'
import { hideAd } from './include/hideAd'

window.addEventListener('DOMContentLoaded', () => {
  initScrollHandler()
  handleFormFocus()
  redirectOnSubmit()
  hideAd()
})
