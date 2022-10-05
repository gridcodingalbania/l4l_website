import { times } from 'lodash';
import { wp_ajax } from '../wp'
import $ from 'jquery';

class LoadMoreProducts{
    constructor(){
        this.productListEls = document.querySelector('.js-product-list');
        this.loadMoreButton = document.querySelector('[load-more]');
        this.offset = 0;
        this.per_page = 4;
        if(this.productListEls){
            this.loadProducts();
        }

        this.loadMoreButton.addEventListener('click', (e) => this.loadMoreOnClick(e));
    }

    loadProducts(){
        const per_page = this.per_page;
        const offset = this.offset;
        wp_ajax('load_more_products').post({
            per_page: per_page,
            offset : offset
        }).then((response) => {
            console.log(response)
            $(this.productListEls).append(response.data.data);
            if(!response.data.success){
               $(this.loadMoreButton).remove();
            }
        });
    }

    loadMoreOnClick(e){
        e.preventDefault();
        this.offset = this.offset + this.per_page;
        this.loadMoreButton.setAttribute('data-offset', this.offset);
        this.loadProducts();
    }
}
export default LoadMoreProducts