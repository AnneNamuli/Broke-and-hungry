

  $(function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 0,
      min: 2500,
      max: 150000,
      step: 500,
      slide: function( event, ui ) {
        $( "#amount" ).val( "UGX" + ui.value );
      }
    });
    $( "#amount" ).val( "UGX" + $( "#slider-range-min" ).slider( "value" ) );
  });
