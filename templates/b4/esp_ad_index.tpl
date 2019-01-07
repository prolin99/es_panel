

    <form action ="index.php" enctype='multipart/form-data' method=post>
    <div class="row" >
    <span for="menu_root" class='col-3'>選用配合選單</span>
    <div class='col-4'>
    <{html_options name='menu_root' options=$data.menu_root  selected=$keyword  class='form-control'  }>
    </div>

    <button type='submit'  name='do_key' value='menu_select' class='btn btn-primary'>指定</button>
    </div>
  </form>

<div class="row">

<{foreach  key=k item=program   from=$data.item }>
<div class="col-<{$data.width}>">

 <div class="text-center">
  <a    href="<{$program.itemurl}>">
  <{if ($program.logo) }>
    <img alt="<{$program.itemname}>" src="<{$program.itemurl}>/<{$program.logo}>" title="<{$program.itemname}>" alt="<{$program.itemname}>">
  <{else  }>
    <button class="btn btn-large btn-primary" type="button" title="<{$program.itemname}>" alt="<{$program.itemname}>"><{$program.itemname}></button>
  <{/if}>
  </a>
 </div>


<br />
</div>

<{/foreach}>

</div>
<{if ($data.memo) }>
<div class="alert alert-info"><{$data.memo}></div>
<{/if}>
