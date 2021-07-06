
<h1>Esto es un Dashboard</h1>

<?php
echo $_SESSION['name'] . ' ' . $_SESSION['lastName'];
?>
<br>

<a href="/index/closeSessions" class="btn btn-danger">Cerrar Sesion</a>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Tareas Pendientes</h2>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Tarea</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->pendingTasks as $task):?>
                        <tr>
                            <td> <?php echo $task->task;?></td>
                            <td><?php echo $task->status;?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h2>Tareas Finalizadas</h2>
            <table class="table table-hover">
                <thead class="table-success">
                    <tr>
                        <th>Tarea</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->doneTasks as $task):?>
                        <tr>
                            <td> <?php echo $task->task;?></td>
                            <td><?php echo $task->status;?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="/index/addTask" method="post">
                <label for="task">Nueva Tarea</label>
                <input type="text" name="task" id="" class="form-control" required autofocus>
                <input type="submit" value="Guardar Tarea" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>