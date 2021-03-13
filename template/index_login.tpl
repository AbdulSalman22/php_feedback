{extends file="layout.tpl"}

{block name="body"}
    <div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <a class="btn btn-success float-right" href="new_login.php">New Login</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>username</th>
                        <th>password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $listdata as $item}
                        <tr>
                            <td>{$item['username']}</td>
                            <td>{$item['password']}</td>
                            <td>
                                <a href="edit_bank.php?edit_id={$item['id']}" class="btn btn-info btn-sm">Edit</a>
                                <a href="delete.php?delete_id={$item['id']}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{/block}