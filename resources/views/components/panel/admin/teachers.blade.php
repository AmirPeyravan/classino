<!-- اساتید -->
    <h2>مدیریت اساتید</h2>
    <form>
        <h3>افزودن استاد جدید</h3>
        <label for="teacher-name">نام</label>
        <input type="text" id="teacher-name" placeholder="نام استاد">
        <label for="teacher-email">ایمیل</label>
        <input type="email" id="teacher-email" placeholder="ایمیل">
        <label for="teacher-pic">تصویر پروفایل</label>
        <input type="file" id="teacher-pic" accept="image/*">
        <label for="teacher-course">کلاس‌ها</label>
        <select id="teacher-course">
            <option>کلاس پایتون</option>
            <option>کلاس طراحی وب</option>
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
        <tr>
            <td>دکتر حسینی</td>
            <td>hosseini@example.com</td>
            <td>پایتون</td>
            <td>
                <button class="action-btn">ویرایش</button>
                <button class="delete-btn">حذف</button>
            </td>
        </tr>
        </tbody>
    </table>
