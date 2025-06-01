<!-- اساتید -->
<h2>مدیریت اساتید</h2>
<form>
    <h3>افزودن استاد جدید</h3>
    <label for="teacher-name">نام</label>
    <input type="text" id="teacher-name" placeholder="نام استاد">
    <label for="teacher-email">ایمیل</label>
    <input type="email" id="teacher-email" placeholder="ایمیل">
    <label for="teacher-course">کلاس‌ها</label>
    <select id="teacher-course">
        @forelse ($courses as $course)
            <option>{{ $course->title }}</option>
        @empty
        @endforelse
    </select>
    <button type="submit">افزودن</button>
</form>
<table>
    <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>کلاس‌ها</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>پایتون</td>
                <td>
                    <button class="action-btn">ویرایش</button>
                    <button class="delete-btn">حذف</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">هیچ داده ای یافت نشد.</td>
            </tr>
        @endforelse
    </tbody>
</table>
