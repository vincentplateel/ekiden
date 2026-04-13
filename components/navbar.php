<# 

This is the navbar component. 
This component uses the "checkboxShowPageInNavbar" field in order
to build the customizable list of links that are displayed in the navbar.

Also here the "@{ checkboxShowPageInNavbar }" comment is used to 
expose the checkbox to the dashboard.

#>

<# @{ checkboxShowPageInNavbar } #>

<# 

The "navbarLinks" snippet is defined separately in order to 
have a cleaner structure and mor readable component. 
It is invoked down below inside the <nav> tag.

#>


<# 

The navbar component renders the navigation tree.

#>

<@~ snippet isActiveNav @>
	<@~ if @{ :current } @> current-menu-item<@ end @>
<@~ end @>

<@~ snippet navbarLink ~@>
	<a href="@{ url }" class="<@ isActive @>">
		@{ title }
	</a>
<@~ end @>

<# 

A navigation tree has a recursive structure that consists of a tree
that contains nodes that can contain other trees.

#>
<@~ snippet navNode ~@>
	<li class="<@ isActiveNav @>">
		<@ if @{ :pagelistCount } ~@>	
					<a href="@{ url }">
						@{ title }
					</a>
				<ul class="submenu">
					<@~ treeNav ~@>
				</ul>
			</details>
		<@ else @>
			<@ navbarLink @>
		<@~ end ~@>
	</li>	
<@~ end @>

<# 

This defines a tree that renders child nodes of the currently iterated context.

#>
<@~ snippet treeNav ~@>
	<@ newPagelist {
		context: false,
		type: 'children',
    excludeHidden: false, 
		match: '{ "checkboxShowPageInNavbar": "/./" }' ,
	} ~@>

	<@~ foreach in pagelist @>
		<@~ navNode ~@>
	<@ end ~@>
<@~ end @>

<# 

This is the actual wrapping navigation snippet.
In this component it is placed inside a details element in 
order to create a responsive menu that converts to a dropdown
on small devices.

#>
<@~ snippet navbarNav @>
	<@ with '/' ~@>
		<ul class="menu">
			<@ if not @{ hidden } @>
				<li><@ navbarLink @></li>	
			<@ end @>
			<@~ treeNav ~@>
		</ul>
	<@~ end @>
<@ end @>

<@~ snippet navbar ~@>
	<@ navbarNav @>
<@~ end ~@>

<nav id="mainnav" class="mainnav">
  <div id="logo-mobie" class="logo">
      <a href="index.html" rel="home">
         <img width="50px" src="/shared/logo-ekiden.png" />
      </a>
  </div><!-- /.logo -->
  <@ navbar @>
</nav><!-- /.mainnav -->


