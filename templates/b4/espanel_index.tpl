
<{$toolbar}>
<div class="row">
<{foreach  key=k item=program   from=$data.item }>
<a    href="<{$program.itemurl}>">
<div class="col-<{$data.width}> col-xs-<{$data.width}> ">
<p>&nbsp;</p>
 <div class="text-center">
  <{if ($program.logo) }>
    <img alt="<{$program.itemname}>" src="<{$program.itemurl}>/<{$program.logo}>">
  <{else  }>
    <button class="btn btn-large btn-primary" type="button"><{$program.itemname}></button>

  <{/if}>
  </div>
  <div class="text-center"><{$program.itemname}></div>

</div>
</a>
<{/foreach}>

</div>
<{if ($data.memo) }>
<div class="alert alert-block"><{$data.memo}></div>
<{/if}>