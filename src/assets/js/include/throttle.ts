let throttleTimer = false
export default function throttle(callback: () => void, time: number) {
  if (throttleTimer) return
  throttleTimer = true
  setTimeout(() => {
    callback()
    throttleTimer = false
  }, time)
}
