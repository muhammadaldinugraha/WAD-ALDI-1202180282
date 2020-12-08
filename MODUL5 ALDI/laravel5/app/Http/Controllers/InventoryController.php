public function delete(Request $request){
    $inventory = Inventory::find($request->id);

    $inventoryc->deleteI();

    return redirect(route('inventory.index'));
}