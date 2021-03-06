<el-form :inline="true" :model="search" class="demo-form-inline">
    <div class="block">
                        <el-form-item label="id">
                    <el-input v-model="search.id"
                    placeholder="id">
                    </el-input>
                </el-form-item>
                <el-form-item label="group_name">
                    <el-input v-model="search.group_name"
                    placeholder="group_name">
                    </el-input>
                </el-form-item>
                <el-form-item label="parent_id">
                    <el-input v-model="search.parent_id"
                    placeholder="parent_id">
                    </el-input>
                </el-form-item>
                <el-date-picker
                        v-model="search.created_at"
                        type="datetimerange"
                        start-placeholder="created_at @lang('form.start_date')"
                        end-placeholder="created_at @lang('form.end_date')"
                        value-format="yyyy-MM-dd HH:mm"
                        format="yyyy-MM-dd HH:mm"
                        :default-time="['00:00:00', '23:59:59']">
                </el-date-picker>
                <el-form-item label="created_by">
                    <el-input v-model="search.created_by"
                    placeholder="created_by">
                    </el-input>
                </el-form-item>
                <el-date-picker
                        v-model="search.updated_at"
                        type="datetimerange"
                        start-placeholder="updated_at @lang('form.start_date')"
                        end-placeholder="updated_at @lang('form.end_date')"
                        value-format="yyyy-MM-dd HH:mm"
                        format="yyyy-MM-dd HH:mm"
                        :default-time="['00:00:00', '23:59:59']">
                </el-date-picker>
                <el-form-item label="updated_by">
                    <el-input v-model="search.updated_by"
                    placeholder="updated_by">
                    </el-input>
                </el-form-item>

    </div>
</el-form>
