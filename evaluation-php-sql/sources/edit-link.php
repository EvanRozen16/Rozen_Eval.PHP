<?php 
  require_once('../header.php');
  require_once('../sources\functions.php')
?>

</head>
  <body>
    <header class="pt-5 mb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h1 class="display-4 text-center">Gestionnaire de liens utiles</h1>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container h-100">
        <div class="row justify-content-center h-50">
          <div class="col-md-6 shadow p-3 pt-5">
            <h2 class="mb-3">Éditer le lien # 1</h2>
            <div class="mb-3">
              <form action="" method="post">
                <div class="mb-3">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="title"
                      name="title"
                      placeholder="Stack overflow"
                    />
                    <label for="title">Titre</label>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-floating">
                    <input
                      type="url"
                      class="form-control"
                      id="url"
                      name="url"
                      placeholder="https://stackoverflow.com"
                    />
                    <label for="url">Lien</label>
                  </div>
                </div>
                <div class="col-md-auto d-flex">
                  <button class="btn btn-primary btn-lg">Enregister</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php 
  require_once('../footer.php')
?>