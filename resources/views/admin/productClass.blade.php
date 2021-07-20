<!-- 添加分类模态框 -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">添加产品分类</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="" method="post">
			<input type="text" placeholder="请输入分类名称" class="form-control mb-2">
			<select class="form-control mb-2">
			  <option>选择上级分类</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
			
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-primary mr-2">保存</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
			</div>
		</form>
      </div>
      
    </div>
  </div>
</div>
<!-- 添加分类模态框 -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">修改产品分类</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        	<input type="text" value="服饰" placeholder="请输入分类名称" class="form-control mb-2">
        	<select class="form-control mb-2">
			  <option>选择上级分类</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
        	<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-primary mr-2">保存</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
			</div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<button class="btn btn-sm btn-primary mt-4" data-toggle="modal" data-target="#addModal">添加产品分类</button>

<!-- 产品分类数据列表 -->
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">序号</th>
      <th scope="col">产品分类名称</th>
      <th scope="col">上级分类名</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>男装</td>
      <td>服饰</td>
      <td>
		  <button class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="iconfont icon-bianji"></i></button>
		  <button class="btn btn-danger"><i class="iconfont icon-shanchu"></i></button>
	  </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>男装</td>
      <td>服饰</td>
      <td>
    	  <button class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="iconfont icon-bianji"></i></button>
    	  <button class="btn btn-danger"><i class="iconfont icon-shanchu"></i></button>
      </td>
    </tr>
	<tr>
	  <th scope="row">1</th>
	  <td>男装</td>
	  <td>服饰</td>
	  <td>
		  <button class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="iconfont icon-bianji"></i></button>
		  <button class="btn btn-danger"><i class="iconfont icon-shanchu"></i></button>
	  </td>
	</tr>
  </tbody>
</table>

<!-- 分页 -->
<div class="page d-flex justify-content-end">
	<ul class="pagination">
	    <li class="page-item">
		  <a class="page-link" href="#" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
		  </a>
		</li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
		  <a class="page-link" href="#" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
		  </a>
		</li>
	</ul>
</div>