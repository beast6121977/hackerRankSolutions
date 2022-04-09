function gradingStudents(grades: number[]): number[] {
    let result: number[] = []
    grades.forEach(function (value) {
        let newGrade: number
        if (value >= 38) {
            let betterGrade = Math.ceil(value / 10) * 10;
            let up = ((betterGrade - value) >= 5) ? betterGrade - 5 : betterGrade
            newGrade = ((up - value) < 3) ? up : betterGrade
        } else {
            newGrade = value;
        }
        result.push(newGrade)
    })

    return result
}

gradingStudents([73, 67, 38, 33])