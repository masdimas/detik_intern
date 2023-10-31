<style>
    /* Styles go here */

    .box {
        display:block;
        width:200px;
        height:100px;
        background-color:#DDD;
    }
    #pop {
        padding:0px 0px;
    }
    #example {
        position:relative;
    }
    .close {
      border:1px solid red;
      display:none
    }
    .popover {
        max-width:450px!important; /*bs override*/ 
      height:100%
    }

    @media only screen and (max-width: 768px) {
      .popover {
        left:0!important;
        top:0!important;
        }
    }
    .popover-content {
      height:100%  
    }
    .popover-footer {
        margin-left:-14px;
        margin-right:-14px;

    }
    .popover-footer ul {
        margin:0; 
        padding:0;
    }
    .popover-footer li {
        display:inline-block;
        list-style-type:none;
        margin-left:14px;	
    }
</style>

<script>
    // Code goes here

(function( $ ){
    var plugin = {
        name: 'TreeView',
        version: '1.0.0'
    }
    var defaults = {
        debug : false,
        autoExpand : false,
        css : {
            list : 'fa-ul',
            listItem : 'fa-li fa',
            collapsed : 'fa-caret-right',
            expanded : 'fa-caret-down'
        }
    }
    
    var settings;
    var debug, me = null;
    
    function __changeHandler( e ) {
        var currentTarget = $(this);
        var isChecked = currentTarget.is(':checked');
        
        debug.log(currentTarget);
        debug.log("Checked ", isChecked)
        
        if (!isChecked) {
            debug.log('Uncheck all childs');
            
            currentTarget.parent()
                         .find('input.tw-control')
                         .prop('checked', false);
        }
        
        if (isChecked) {
            debug.log('Check my parents tree');
            
            currentTarget.parents('li')
                         .find('>input.tw-control')
                         .prop('checked', true);
        }
        
        _toggleCollapse( currentTarget );
        
        me.trigger('treeview.change', currentTarget, me);
    }
    
    function _toggleCollapse ( element ) {
        debug.log("Toggle collapse");
        
        var chk = $('input[type="checkbox"]:checked');
        
        if (chk.is(':checked')) {
            debug.log('Open checked branchs');
          alert('OPEN');
            chk.parent()
               .find('>ul.collapse')
               .collapse('show')
               .parent()
               .find('>i.fa-li')
               .removeClass(settings.css.collapsed)
               .addClass(settings.css.expanded);
        }
        
        if (!element.is(':checked')) {
            debug.log('Hide branch');
          alert('HIDE BRANCH');
            
            element.parent()
                   .find('ul.collapse')
                   .collapse('hide')
                   .parent()
                   .find('i.fa-li')
                   .removeClass(settings.css.expanded)
                   .addClass(settings.css.collapsed);
                
                
        }
    }
    
    function _init() {
        debug.log( "Initializing plugin" );
        
        me.on('change', 'input.tw-control', __changeHandler);
        
        debug.log("Collapsing tree");
    
        
        
        me.find('>ul')
          .addClass(settings.css.list)
          .find('ul')
          .addClass('collapse ' +  settings.css.list)
          .parent()
          .prepend(
              $('<i></i>').addClass(settings.css.listItem + ' ' +
                                    settings.css.collapsed)
          );
          
        if (settings.autoExpand) {
            me.find('ul.collapse').collapse('show');
     
        }
        
        debug.log("Adding checkbox");
            
        me.find('li').each(function( index, element ) {
            var elmt = $(element);
            
            var chk = $('<input/>').prop('type', 'checkbox')
                                   .prop('class', 'tw-control')
                                   .prop('value', elmt.attr('data-value'));
            
            debug.log("Checking if the element is selected");
            
            var isChecked = elmt.attr('data-checked');
            
            elmt.prepend(chk);
            
            if ( isChecked ) {
                debug.log('Toggle checkbox');
                
                chk.prop('checked', true);
                
                chk.trigger('change');
            }
        });
    }
    
    function _fill( data ) {
        $( data ).each(function (index, element) {
            me.find('input[value="' + element + '"]')
              .prop('checked', true)
              .trigger('change');
        });
    }
    
    var publicMethods = {
        init : function( options ) {
            me = this;
            
            settings = $.extend( defaults, options );
            
            debug = $.Logger(settings.debug, plugin);
            
            _init();
            
            debug.log('Ready');
            
            _fill ( options.data );
            
            return this;
        },
        selectedValues: function() {
            debug.log("Getting selected values");
            
            var chk = me.find('input[type="checkbox"]:checked');
            var output = [];
            
            chk.each(function(index, item) {
                var item = $(item);
                
                if(typeof item.parent().attr('data-value') !== typeof undefined) {
                    output.push(item.attr('value'));
                }
            })
            
            return output;
        }
    }
    
    $.fn.treeview = function (options) {
        if ( publicMethods[options] ) {
            return publicMethods[ options ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof options === 'object' || ! options ) {
            // Default to "init"
            return publicMethods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  options  + ' does not exist on jQuery.treeview' );
        }
    }
    
}( jQuery ));




///////



$(".pop").popover({
  trigger: "manual",
  content: function() {
    return $('#popover-wrapper').html();
  },
  html: true,
  animation: false
}).on("mouseenter", function() {
  var _this = this;
  $(this).popover("show");
  $(".popover").on("mouseleave", function() {
    $(_this).popover('hide');
  });
  $(".close").on("mousedown", function() {
    $(_this).popover('hide');
  });
}).on("mouseleave", function() {
  var _this = this;
  setTimeout(function() {
    if (!$(".popover:hover").length) {
      $(_this).popover("hide");
    }
  }, 100);
})

$('#treeview-checkbox-demo').treeview();

  
    /*
    $('#treeview-checkbox-demo').treeview({
      debug: true,
      data: ['links']
    });
    */
/*
    $('#show-values').on('click', function() {
      $('#values').text(
       $('#treeview-checkbox-demo').treeview('selectedValues')
      );
    }); */

    

</script>

<!-- popover contents -->
<div id="popover-wrapper" style="">
  <div class="close">
    <i class="fa fa-times" aria-hidden="true"></i> close
  </div>
  <div class="popover-content">
   
          <div id="treeview-checkbox-demo">
            <ul>
                <li>HTML
                <ul>
                        <li data-value="table">HTML table</li>
                        <li data-value="links">HTML links</li>
                 </ul>
                </li>
                <li>PHP
                    <ul>
                        <li data-value="PHP if..else">PHP if..else</li>
                        <li>PHP Loops
                            <ul>
                                <li data-value="For loop">For loop</li>
                                <li data-value="While loop">While loop</li>
                                <li data-value="Do WHile loop">Do WHile loop</li>
                            </ul>
                        </li>
                        <li>PHP arrays</li>
                    </ul>
                </li>
                <li>jQuery
                    <ul>
                        <li data-value="jQuery append">jQuery append</li>
                        <li data-value="jQuery prepend">jQuery prepend</li>
                    </ul>
                </li>
            </ul>
        </div>
    
  </div> 
	<div class="popover-footer">
    <button class="btn btn-default">Apply</button> 
	</div> 
</div>