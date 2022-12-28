<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Routing\Controller as BaseController;
use App\Contracts\Dao\ListDaoInterface;

class ToDoListController extends BaseController
{
    /**
     * list interface
     */
    private $listInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ListDaoInterface $ListDaoInterface)
    {
        $this->listInterface = $ListDaoInterface;
    }
    public function index() {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
    public function store(request $request) {
        $List = $this->listInterface->storeList($request);
         return $List;
    }
    public function delete($id) {
        $List = $this->listInterface->deleteList($id);
         return $List;
    }
    public function edit($id) {
        $List = $this->listInterface->editList($id);
        return $List;
    }
    public function update(request $request, $id) {
        $List = $this->listInterface->updateList($request,$id);
         return $List;
    }
}
