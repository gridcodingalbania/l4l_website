import qs from 'qs'
import axios, { AxiosRequestConfig } from 'axios'
// window.INITIAL_DATA = {"ajax_url":"http:\/\/nmc-theme.test\/wp-admin\/admin-ajax.php","foo":"bra"};
const BASE_URL = window.APP_DATA.ajax_url;

class Ajax {

  /**
   * 
   * @param {string} action 
   */
  static init(action) {
    return new this(action)
  }
  
  /**
   * 
   * @param {string} action 
   */
  constructor(action) {
    if(!action || typeof action !== 'string') {
      throw new Error(`{action} must be string, got: ${typeof action}`)
    }
    this.action = action;
  }

  /**
   * 
   * @param {Object} [params] 
   * @param {AxiosRequestConfig} [config]
   */
  get(params = {}, config) {
    let _params = {}
    if(params) {
      _params = params
    }

    _params.action = this.action

    const query = qs.stringify(_params);
  
    return axios.get(`${BASE_URL}?${query}`, config)
  }

  /**
   * 
   * @param {Object} [data] 
   * @param {AxiosRequestConfig} [config]
   */
  post(data = {}, config) {
    let _data = {}
    if(typeof data === 'object') {
      _data = data
    }

    _data.action = this.action
  
    return axios.post(BASE_URL, qs.stringify(_data), config)
  }
}

export default Ajax;