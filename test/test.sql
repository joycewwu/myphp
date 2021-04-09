

-- select: 顯示的欄位
-- from: 資料的來源
-- where: 過濾條件
-- group by: 資料分組的依據
-- having: 分組欄位的過濾條件
-- order by: 查詢結果的排序方式
-- limit: 查詢結果的忽略/限制筆數


SELECT
    COUNT(1) num,
    p.`category_sid`,
    c.name cate_name
FROM `products` p
         JOIN `categories` c
              ON p.category_sid=c.sid
GROUP BY p.`category_sid`;