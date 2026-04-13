<# 

Also the "pagelist" template is based on the "page" component.
The only exception is the content of the "main" snippet that is deeply nested 
inside the page component.

In order to inherit the "page" component and only changing the main snippet,
we can simply redefine it after the include statement.

#>
<@ components/page.php @>

<@~ snippet main ~@>

		<# 

		The main content goes here. 

		#>
		<@ components/content.php @>

    <@ newPagelist {
			type: @{ selectPagelistSubset | def (false) },
			sort: @{ selectPagelistSort },
			context: @{ urlPagelistContext | def (false) },
			filter: @{ ?filter },
			page: @{ ?page | def (1) },
			limit: 8
		} @>

    <div class="tf-widget-events">
        <div class="themeflat-container">
            @{ +main }
          <# 

          The grid template for the page previews can also be used here to render the actual pagelist content.

          #>
          <@ blocks/pagelist/grid.php @>

          <# 
        
          At the end we also add the pagination component.

          #>
          <@ components/pagination.php @>
        </div>
    </div>

		<# 

		Before we can render a filter menu and the actual page previews,
		we have to define a pagelist that respects query string parameters and
		the user's configuration.

		#>	
		

    
			
	
<@~ end ~@>


