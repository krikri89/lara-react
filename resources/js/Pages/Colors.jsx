function Colors({ niceColors }) {
    console.log(niceColors);

    return (
        <div className="my-bin">
            {niceColors.map((c, i) => (
                <div
                    key={i}
                    className="my-colors-square"
                    style={{ backgroundColor: c }}
                >
                    {c}
                </div>
            ))}
        </div>
    );
}
export default Colors;
