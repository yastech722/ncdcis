<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

<input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>

<input type="checkbox" name="foo[]" value="bar1"> Bar 1<br/>
<input type="checkbox" name="foo[]" value="bar2"> Bar 2<br/>
<input type="checkbox" name="foo[]" value="bar3"> Bar 3<br/>
<input type="checkbox" name="foo[]" value="bar4"> Bar 4<br/>