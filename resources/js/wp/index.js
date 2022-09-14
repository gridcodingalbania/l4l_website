import Ajax from './Ajax'
import Translate from './Translate'

/**
 * 
 * @param {string} action 
 */
function wp_ajax(action) {
  return Ajax.init(action)
}

function asset(path) {
  return `${window.INITIAL_DATA.themeUri}/resources/${path}`;
}

export {
  Ajax,
  Translate,
  wp_ajax,
  asset,
}