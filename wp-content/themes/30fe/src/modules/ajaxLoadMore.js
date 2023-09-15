import axios from 'axios';


function ajaxLoadMore() {

  const button = document.querySelector('.insights__load');

  if (typeof (button) != 'undefined' && button != null) {

    button.addEventListener('click', (e) => {
      e.preventDefault();

      let current_page = document.querySelector('.insights__grid').dataset.page;
      let max_pages = document.querySelector('.insights__grid').dataset.max;

      let params = new URLSearchParams();
      params.append('action', 'load_more_posts');
      params.append('current_page', current_page);
      params.append('max_pages', max_pages);

      axios.post('/wp-admin/admin-ajax.php', params)
        .then(res => {

          let posts_list = document.querySelector('.insights__grid');

          posts_list.innerHTML += res.data.data;

          // let getUrl = window.location;
          // let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

          // window.history.pushState('', '', baseUrl + 'insights/' + 'page/' + (parseInt(document.querySelector('.insights__grid').dataset.page) + 1));

          // console.log(parseInt(document.querySelector('.insights__grid').dataset.page));

          document.querySelector('.insights__grid').dataset.page++;

          if (document.querySelector('.insights__grid').dataset.page == document.querySelector('.insights__grid').dataset.max) {
            button.parentNode.removeChild(button);
          }

        })

    });

  }

};

ajaxLoadMore()

