<div id="vue-im-form">
    <div class="mb-3">
        <label class="form-label">用户名</label>
        <input type="text"  v-model="username" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label class="form-label">邮箱</label>
        <input type="email"  v-model="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">原密码</label>
        <input type="password" class="form-control" name="oldpwd">
    </div>
    <div class="mb-3">
        <label class="form-label">新密码</label>
        <input type="password" class="form-control" name="newpwd">
    </div>
    <button class="btn btn-primary">提交</button>
</div>
