
<div class="row">
  <div class="form-group">
    <form action ="index.php" enctype='multipart/form-data' method=post>
   <label for="menu_root" class='col-md-2'>選用配合選單</label>
    <div class='col-md-4'>
    <{html_options name='menu_root' options=$data.menu_root  selected=$keyword  class='form-control'  }>
    </div>
    <button type='submit'  name='do_key' value='menu_select' class='btn btn-primary'>指定</button>
  </form>
  </div>

<{foreach  key=k item=program   from=$data.item }>

<div class="col-md-<{$data.width}> col-xs-<{$data.width}>">

 <div class="text-center">
  <a href="<{$program.itemurl}>">
  <{if ($program.logo) }>
    <img alt="<{$program.itemname}>" src="<{$program.itemurl}>/<{$program.logo}>" title="<{$program.itemname}>" alt="<{$program.itemname}>" >
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
<div class="alert alert-block"><{$data.memo}></div>
<{/if}>
