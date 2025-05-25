<div id="upload-content" class="tab-content">
    <h2>آپلود محتوای آموزشی</h2>
    <form>
        <label for="class-select">انتخاب کلاس</label>
        <select id="class-select">
            <option value="python">برنامه‌نویسی پایتون</option>
            <option value="web">طراحی وب</option>
        </select>
        <label for="file-upload">بارگذاری فایل</label>
        <input type="file" id="file-upload" accept=".pdf,.mp4,.jpg,.png">
        <button type="submit">آپلود</button>
    </form>
    <h3>فایل‌های کلاس</h3>
    <table>
        <thead>
        <tr>
            <th>نام فایل</th>
            <th>نوع</th>
            <th>کلاس</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>درسنامه پایتون.pdf</td>
            <td>PDF</td>
            <td>برنامه‌نویسی پایتون</td>
            <td><button class="delete-btn">حذف</button></td>
        </tr>
        <tr>
            <td>آموزش CSS.mp4</td>
            <td>ویدیو</td>
            <td>طراحی وب</td>
            <td><button class="delete-btn">حذف</button></td>
        </tr>
        </tbody>
    </table>
</div>
