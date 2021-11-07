


<div class="back">

<x-header />

  <div class="div-center">


    <div class="content">


      <h3>Registraction Page</h3>
      <hr />
      <form method="POST" action="\reg">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputContact">Contact</label>
            <input type="text" name="contact" class="form-control" id="exampleInputContact" placeholder="Contact">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
        <hr />
        <button type="button" class="btn btn-link" onclick="window.location.href='/'">Signup</button>
        <button type="button" class="btn btn-link" onclick="window.location.href='/reset'">Reset Password</button>

      </form>

    </div>


    </span>
  </div>

  <style>
      .back {
  background: #e2e2e2;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
}

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}
label{
    padding:5px;
}
  </style>

