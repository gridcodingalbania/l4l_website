import get from 'lodash/get'
const { TRANSLATIONS } = window;

function getTranslation(key) {
  return get(TRANSLATIONS, key, null)
}


const Translate = {
  get: getTranslation
}

if (!window.Translate) {
  window.Translate = Translate
}

export default Translate