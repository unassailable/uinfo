
<ul class="tabs">
	{{foreach $tabs as $tab}}
		<li id="{{$tab.id}}"><a href="{{$tab.url}}" class="tab button {{$tab.sel}}"{{if $tab.title}} title="{{$tab.title}}"{{/if}}>{{$tab.label}}</a></li>
	{{/foreach}}
	<div id="tabs-end"></div>
</ul>