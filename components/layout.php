<# 

This is the main layout snippet that is composed of other components. The included components
can be rearragned or removed by overriding (re-defining) the snippet in a situation where the conaining
page template is iherited by another template.

#>
<@~ snippet layout ~@>
  <!-- preload -->
  <div class="preload preload-container">
      <div class="swapping-squares-spinner">
           <span class="loader"></span>
      </div>
      
  </div>
  <!-- /preload -->
  <@ header.php @>
  <@ main.php @>
  <@ footer.php @>
  <a class="go-top show">
      <i class="icon-ctrl"></i>
  </a>
<@~ end ~@>

<# 

The definition above is not actually rendering the snippet. We must invoke it separately 
in order to allow for overriding it without immediate output.

#>
<@ layout @>
