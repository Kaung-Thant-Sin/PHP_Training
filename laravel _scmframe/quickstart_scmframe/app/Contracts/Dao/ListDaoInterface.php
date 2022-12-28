<?php

namespace App\Contracts\Dao;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of List
 */
interface ListDaoInterface
{
  /**
   * To save List
   */
  public function storeList(Request $request);

  /**
   * To get List
   */
  public function index();

  /**
   * To delete List by id
   */
  public function deleteList($id);

  /**
   * To update List by id
   */
  public function editList($id);
  public function updateList(Request $request, $id);
}