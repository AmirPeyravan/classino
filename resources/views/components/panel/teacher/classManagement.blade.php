<div id="class-management">
    <h2>مدیریت کلاس‌ها</h2>
    <button class="action-btn" onclick="document.getElementById('create-class-form').style.display='block'">ایجاد کلاس جدید</button>
    <form id="create-class-form" style="display: none;">
        <label for="class-title">عنوان کلاس</label>
        <input type="text" id="class-title" placeholder="عنوان کلاس">
        <label for="class-description">توضیحات</label>
        <textarea id="class-description" placeholder="توضیحات کلاس"></textarea>
        <label for="class-category">دسته‌بندی</label>
        <select id="class-category">
            <option value="programming">برنامه‌نویسی</option>
            <option value="design">طراحی</option>
            <option value="ai">هوش مصنوعی</option>
        </select>
        <label for="class-capacity">ظرفیت</label>
        <input type="number" id="class-capacity" placeholder="ظرفیت کلاس">
        <label for="class-schedule">برنامه زمانی</label>
        <input type="text" id="class-schedule" placeholder="مثال: یکشنبه‌ها 18:00">
        <button type="submit">ایجاد کلاس</button>
    </form>
    <h3>لیست کلاس‌ها</h3>
    <table>
        <thead>
        <tr>
            <th>عنوان</th>
            <th>دسته‌بندی</th>
            <th>ظرفیت</th>
            <th>برنامه</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>برنامه‌نویسی پایتون</td>
            <td>برنامه‌نویسی</td>
            <td>30</td>
            <td>یکشنبه‌ها 18:00</td>
            <td>
                <button class="action-btn">ویرایش</button>
                <button class="delete-btn">حذف</button>
                <button class="action-btn">دانشجویان</button>
            </td>
        </tr>
        <tr>
            <td>طراحی وب</td>
            <td>طراحی</td>
            <td>25</td>
            <td>دوشنبه‌ها 17:00</td>
            <td>
                <button class="action-btn">ویرایش</button>
                <button class="delete-btn">حذف</button>
                <button class="action-btn">دانشجویان</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
