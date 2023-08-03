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
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
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
        <section class="row">
          <section class="one-third">
              <h2 class="search-overlay__section-title">General Information</h2>
              ${results.generalInfo.length ? '<ul class="link-list min-list">' : '<p>No general information matches that search.</p>'}
              ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
              ${results.generalInfo.length ? '</ul>' : ''}
          </section>
          <section class="one-third">
             <h2 class="search-overlay__section-title">Team</h2>
               ${results.team.length ? '<ul class="professor-cards">' : '<p>No team member match that search.</p>'}
              ${results.team.map(item => `
                
        <img class="member__image" src="${item.image}" alt="x" title="" width="100%">
              `).join('')}
              ${results.team.length ? '</ul>' : ''}
          </section>
          <section class="one-third">
             <h2 class="search-overlay__section-title">Expertise</h2>
               ${results.expertise.length ? '<ul class="link-list min-list">' : '<p>No expertise match that search.</p>'}
              ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
              ${results.generalInfo.length ? '</ul>' : ''}
          </section>
            <section class="one-third">
             <h2 class="search-overlay__section-title">Sector</h2>
               ${results.sector.length ? '<ul class="link-list min-list">' : '<p>No general information matches that search.</p>'}
              ${results.sector.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join('')}
              ${results.sector.length ? '</ul>' : ''}
          </section>
        </section>
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
      <section class="search-overlay__top">
        <section class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
        <input id="search-term" type="text" class="search-term" placeholder="What are you looking for?"
        autocomplete="off">
      <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
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