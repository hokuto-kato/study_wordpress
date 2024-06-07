export const hideAd = () => {
  const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      if (mutation.addedNodes) {
        mutation.addedNodes.forEach((node) => {
          if (node.nodeType === 1 && (node as Element).id === 'vdbanner') {
            ;(node as Element).remove()
          }
        })
      }
    })
  })

  observer.observe(document.body, { childList: true, subtree: true })
}
