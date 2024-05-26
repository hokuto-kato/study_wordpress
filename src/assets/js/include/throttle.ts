function throttle(
  func: (...arg: unknown[]) => void | Promise<void>,
  limit: number
) {
  let inThrottle = false
  return async (...args: unknown[]) => {
    if (!inThrottle) {
      inThrottle = true
      const result = func(...args)
      if (result instanceof Promise) {
        await result
      }
      setTimeout(() => (inThrottle = false), limit)
    }
  }
}
export default throttle
