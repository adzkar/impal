<div id="rekening-section"style="display: none;opacity: 0">
  <div class="blurry-background" onclick="shRekening();">
  
  </div>
  <div class="container bootstrap snippets rekening-own">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="form-horizontal">
              <br>
              <div class="panel-heading">
              </div>
            <div class="panel panel-default">
              <br>
              <div class="panel-heading">
              <h6 class="panel-title"><b>Info Rekening</b></h6>
              </div>
              <br>
        <table class="table table-striped tabRek">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pemilik Rekening</th>
              <th scope="col">Nomor Rekening</th>
              <th scope="col">Nama Bank Rekening</th>
              <th scope="col">Hapus</th>
              <th scope="col">Sunting</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-light">
              <th scope="row">1</th>
              <td>Jono Joni Jontor</td>
              <td>164-123-44-987</td>
              <td>Mandiri</td>
              <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
              <td><button type="button" class="btn btn-outline-dark">KLIK DISINI</button></td>
            </tr>
          </tbody>
        </table>
        <div class="isiRek">
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Pemilik Rekening</label>
                  <div class="col-sm-8">
                    <input type="text" id="namaGor" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nomor Rekening</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamatGor" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Bank Rekening</label>
                  <div class="col-sm-8">
                    <input type="text" id="namaGor" class="form-control" value="">
                  </div>
                </div>
              </div>
        </div>
            <div class="panel panel-default">
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" onclick="">Tambah Rekening</button>
                    <button type="reset" class="btn btn-default" onclick="shRekening();">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>

