
<{$toolbar}>
<div class="row">
<{foreach  key=k item=program   from=$data.item }>

<div class="col-md-<{$data.width}> col-xs-<{$data.width}> ">

 <div class="text-center">
  <a    href="<{$program.itemurl}>">
  <{if ($program.logo) }>
    <img alt="<{$program.itemname}>" src="<{$program.itemurl}>/<{$program.logo}>" title="<{$program.itemname}>" alt="<{$program.itemname}>">
  <{else  }>
    <button class="btn btn-large btn-primary" type="button" title="<{$program.itemname}>" alt="<{$program.itemname}>"><{$program.itemname}></button>

  <{/if}>
  </a>
  </div>
  <br/>

</div>

<{/foreach}>

</div>
<{if ($data.memo) }>
<div class="alert alert-block"><{$data.memo}></div>
<{/if}>
