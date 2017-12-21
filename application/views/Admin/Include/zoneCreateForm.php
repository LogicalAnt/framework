
<form autocomplete="off" method="POST" action="">
  <div class="form-group">
    <label>Zone Name</label>
    <input type="text" class="form-control"  placeholder="Meaningful Zone Name" id="zName">
    <small  class="form-text text-muted">A meaningful subzone name may express many things</small>
  </div>
  
  <div class="form-group">
    <label for="exampleSelect1">Parent Zone</label>
    <select class="form-control" id="exampleSelect1">
      <?php echo $name; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Assigned Publishers</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>Alex</option>
      <option>Dev</option>
      <option>Billy</option>
      <option>David</option>
      <option>Joe</option>
    </select>
  </div>
  <div class="form-group">
    <label>Content Password </label>
    <input type="password" class="form-control"  placeholder="Public Access Password">
    <small class="form-text text-muted">Use this feature to password protect any content assigned to this zone.
    NOTE : if an article is assigned to more than one zone, and at least one of them is not password protected, the article will be made publicly available.</small>
  </div>
  <div class="form-group">  
    <label class="custom-file">
      <input type="file" id="file2" class="custom-file-input">
      <span class="custom-file-control"></span>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

