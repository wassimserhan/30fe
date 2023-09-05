import $ from 'jquery';



class Search {

  //1. Describe and create/initiate our object
  constructor() {
    this.addSearchHTML();
    this.resultsDiv = $("#search-overlay__results")
    this.openButton = $(".search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.searchField = $("#search-term");
    this.events();
    this.isOverlayOpen = false;
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;

  }

  //2. events
  events() {
    this.openButton.on('click', this.openOverlay.bind(this));
    this.closeButton.on('click', this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatcher.bind(this));
    this.searchField.on("keyup", this.typingLogic.bind(this));
  }


  //3. methods (functions)
  typingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer);

      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.html('<div class="spinner-loader"></div>')
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 400);
      } else {
        this.resultsDiv.html("");
        this.isSpinnerVisible = false;
      }


    }

    this.previousValue = this.searchField.val();
  }

  getResults() {
    $.getJSON(siteData.root_url + '/wp-json/30fe/v1/search?term=' + this.searchField.val(), (results) => {
      this.resultsDiv.html(`
        <div class="row">
          <div class="one-third">
          <section class="pill search-overlay__pill pill-white">
        <p class="pill__label pill__label-white">Team</p>
      </section>
           
            ${results.team.length ? '<section class="search__results">' : `<p class="search__result__none"> No results match that search. <a href="${siteData.root_url}/team">View Team</a></p>`}
              ${results.team.map(item => `
                <a class="search__result__link" href="${item.permalink}">
                  <section class="search__result">
                    <img src="${item.image}">
                    <section class="search__result__detail">
                   
                      <p class="search__result__title">${item.title}</p>
                    </section>
                 </section>
                </a>`).join('')}
              ${results.team.length ? '</section>' : ''}  
          </div>
           <div class="one-third">
               <section class="pill search-overlay__pill pill-white">
        <p class="pill__label pill__label-white">Expertise</p>
      </section>
              ${results.expertise.length ? '<section class="search__results">' : `<p class="search__result__none"> No results match that search. <a href="${siteData.root_url}/expertise">View Expertise</a></p>`}
              ${results.expertise.map(item => `
                <a class="search__result__link" href="${item.permalink}">
                  <section class="search__result">
                    <img src="${item.image}">
                    <section class="search__result__detail">
                   
                      <p class="search__result__title">${item.title}</p>
                    </section>
                 </section>
                </a>`).join('')}
              ${results.expertise.length ? '</section>' : ''}  

               <section class="pill search-overlay__pill pill-white">
        <p class="pill__label pill__label-white">Sectors</p>
      </section>
              ${results.industry.length ? '<section class="search__results">' : `<p class="search__result__none"> No results match that search. <a href="${siteData.root_url}/sectors">View Sectors</a></p>`}
              ${results.industry.map(item => `
                <a class="search__result__link" href="${item.permalink}">
                  <section class="search__result">
                    <img src="${item.image}">
                    <section class="search__result__detail">
                       
                      <p class="search__result__title">${item.title}</p>
                    </section>
                 </section>
                </a>`).join('')}
              ${results.industry.length ? '</section>' : ''}  
          </div>
           <div class="one-third">
              <section class="pill search-overlay__pill pill-white">
        <p class="pill__label pill__label-white">Insights</p>
      </section>
              ${results.post.length ? '<section class="search__results">' : `<p class="search__result__none"> No results match that search. <a href="${siteData.root_url}/insights">View Insights</a></p>`}
              ${results.post.map(item => `
                <a class="search__result__link" href="${item.permalink}">
                  <section class="search__result">
                    <img src="${item.image}">
                    <section class="search__result__detail">
                      <p class="search__result__title">${item.title}</p>
                    </section>
                 </section>
                </a>`).join('')}
              ${results.post.length ? '</section>' : ''}  
          </div>
        </div>
            
      `);
      this.isSpinnerVisible = false;
    });
  }

  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOverlayOpen && !$("input, textarea").is(":focus")) {
      this.openOverlay();
    }
    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay();
    }

  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");
    this.searchField.val('');
    setTimeout(() => this.searchField.focus(), 301)
    this.isOverlayOpen = true;

  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
    this.isOverlayOpen = false;
  }

  addSearchHTML() {
    $("body").append(`
    <section class="search-overlay">
      <section class="search-overlay__top ">
        <section class="search-overlay__wrapper max-width">
        <img class="search-overlay__icon" src="${siteData.root_url}/wp-content/themes/30fe/images/search-icon.svg"
        alt="search icon"> 
   
        <input id="search-term" type="text" class="search-term" placeholder="What are you looking for today?"
        autocomplete="off">

<img class="search-overlay__close" src="${siteData.root_url}/wp-content/themes/30fe/images/cross.svg"
        alt="close search">      
        </section>
    </section>
    <section class="container">
     <section id="search-overlay__results"></section>
    </section>
</section>
    `)
  }

}

export default Search