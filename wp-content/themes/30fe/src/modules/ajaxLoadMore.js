import axios from 'axios';


document.addEventListener('DOMContentLoaded', function () {
  const loadMoreBtn = document.getElementById('load-more');
  const postsContainer = document.getElementById('ajax-posts');

  if (!loadMoreBtn || !postsContainer) {
    console.error('Load more button or posts container not found.');
    return;
  }

  let currentPage = parseInt(loadMoreBtn.getAttribute('data-page')) || 1;
  const postType = loadMoreBtn.getAttribute('data-post-type');
  const ajaxUrl = loadMoreBtn.getAttribute('data-url');

  loadMoreBtn.addEventListener('click', function () {
    currentPage++; // Increment the page number

    // Prepare data using FormData
    const formData = new FormData();
    formData.append('action', 'load_more_posts');
    formData.append('current_page', currentPage);
    formData.append('post_type', postType);

    // Send POST request with FormData
    axios.post(ajaxUrl, formData)
      .then(response => {
        if (response.data.success) {
          postsContainer.insertAdjacentHTML('beforeend', response.data.data);
          loadMoreBtn.setAttribute('data-page', currentPage);
        } else {
          loadMoreBtn.style.display = 'none'; // Hide button if no more posts
          console.log(response.data.data); // Log error msg
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });
});


