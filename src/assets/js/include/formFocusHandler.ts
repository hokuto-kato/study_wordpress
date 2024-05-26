const toggleLabelClass = (
  element: HTMLInputElement,
  action: 'add' | 'remove'
) => {
  const label = (element.parentNode as HTMLElement).nextElementSibling
  if (!label) return
  label.classList[action]('active')
}

export function handleFormFocus() {
  const inputs = document.querySelectorAll(
    '[data-form] input, [data-form] textarea'
  )
  inputs.forEach((input) => {
    input.addEventListener('focus', (e) => {
      toggleLabelClass(e.currentTarget as HTMLInputElement, 'add')
    })
    input.addEventListener('blur', (e) => {
      toggleLabelClass(e.currentTarget as HTMLInputElement, 'remove')
    })
  })
}
