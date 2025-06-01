<!-- کاربران -->
<h2>مدیریت کاربران</h2>
<div class="search-box">

    <form method="GET" action="{{ url()->current() }}" id="filterForm" class="mb-3 d-flex gap-2">
        <input type="hidden" name="tab" value="users">

        <input type="text" name="search" value="{{ request('search') }}" placeholder="جستجو..."
            class="form-control" />

        <select name="role" class="form-select" onchange="document.getElementById('filterForm').submit();">
            <option value="">همه نقش‌ها</option>
            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>ادمین</option>
            <option value="student" {{ request('role') == 'student' ? 'selected' : '' }}>کاربر</option>
            <option value="teacher" {{ request('role') == 'teacher' ? 'selected' : '' }}>استاد</option>
        </select>
    </form>



</div>
<table>
    <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>

        @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>فعال</td>
                <td>
                    <button class="action-btn">تغییر وضعیت</button>
                    <button class="delete-btn">حذف</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">هیچ کاربری یافت نشد.</td>
            </tr>
        @endforelse

    </tbody>
</table>
