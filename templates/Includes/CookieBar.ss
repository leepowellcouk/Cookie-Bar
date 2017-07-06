<% if ShowCookieBar %>
	<% with SiteConfig %>
	<div class="cookie-bar" id="cookie-bar">
		<div class="wrapper">
			<p class="cookie-bar-content">$CookieBarContent<% if CookieBarPage %> - <a href="$CookieBarPage.Link" class="cookie-bar-more">$CookieBarMoreText</a><% end_if %></p>
			<a id="cookie-bar-accept" class="cookie-bar-accept button" href="$Top.AcceptCookiesLink" rel="nofollow">$CookieBarCloseText</a>
		</div>
	</div>
	<% end_with %>
<% end_if %>
