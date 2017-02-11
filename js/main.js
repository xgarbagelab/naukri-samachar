  $(".button-collapse").sideNav(); //navigation
$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '30%', // Ending top style attribute
//      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
//        alert("Ready");
//        console.log(modal, trigger);
//      },
//      complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  //Slider
   (function() {
        jQuery(function() {
        this.film_rolls || (this.film_rolls = []);
        this.film_rolls['slider2'] = new FilmRoll({
        container: '#slider2',
        height: 250,
        });
        return true;
        });
        }).call(this);
        
        
       