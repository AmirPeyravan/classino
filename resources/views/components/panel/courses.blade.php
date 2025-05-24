<!-- کلاس‌ها -->
    <h2>مدیریت کلاس‌ها</h2>
    <form>
        <h3>افزودن کلاس جدید</h3>
        <label for="course-name">نام کلاس</label>
        <input type="text" id="course-name" placeholder="نام کلاس">
        <label for="course-category">دسته‌بندی</label>
        <select id="course-category">
            <option>برنامه‌نویسی</option>
            <option>طراحی وب</option>
        </select>
        <label for="course-teacher">استاد</label>
        <select id="course-teacher">
            <option>دکتر حسینی</option>
            <option>استاد محمدی</option>
        </select>
        <label for="course-price">قیمت (تومان)</label>
        <input type="number" id="course-price" placeholder="قیمت">
        <label for="course-start">تاریخ شروع</label>
        <input type="date" id="course-start">
        <label for="course-duration">مدت‌زمان (ساعت)</label>
        <input type="number" id="course-duration" placeholder="مدت‌زمان">
        <label for="course-image">تصویر کلاس</label>
        <input type="file" id="course-image" accept="image/*">
        <button type="submit">افزودن</button>
    </form>
    <table>
        <thead>
        <tr>
            <th>نام کلاس</th>
            <th>دسته‌بندی</th>
            <th>استاد</th>
            <th>قیمت</th>
            <th>تاریخ شروع</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>پایتون مقدماتی</td>
            <td>برنامه‌نویسی</td>
            <td>دکتر حسینی</td>
            <td>500,000</td>
            <td>1404/03/01</td>
            <td>
                <button class="action-btn">ویرایش</button>
                <button class="delete-btn">حذف</button>
            </td>
        </tr>
        </tbody>
    </table>
