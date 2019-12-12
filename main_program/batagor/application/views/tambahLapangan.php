<div id="tambah-lap-section"style="display: none;opacity: 0">
  <div class="blurry-background" onclick="shTambahLapangan();">
  
</div>
  <div class="container bootstrap snippets tambah-lap">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="form-horizontal">
              <div class="panel-heading">
              <h4 class="panel-title"><b>Gambar Lapangan</b></h4>
              </div>
            <div class="panel panel-default">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="imageLapangan"
                    aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
              
              <div class="panel-heading">
              <h4 class="panel-title"><b>Info Lapangan</b></h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" id="namaLapangan" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Lapangan</label>
                  <div class="col-sm-8">
                    <input type="text" id="jenisLapangan" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga /Jam</label>
                  <div class="col-sm-8">
                    <input type="text" id="hargaLapangan" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Deskripsi Lapangan</label>
                  <div class="col-sm-8">
                    <input type="text" id="detailLapangan" class="form-control" value="">
                  </div>
                </div>
              </div>
   

            <div class="panel panel-default">
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" onclick="rubah()">Submit</button>
                    <button type="reset" class="btn btn-default" onclick="shTambahLapangan();">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>

